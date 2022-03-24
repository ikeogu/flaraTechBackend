<?php

namespace App\Imports;

use App\Http\Controllers\Management\Church\ChurchController;
use App\Models\Church;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Throwable;

class UsersImport implements ToCollection, WithHeadingRow, WithChunkReading, ShouldQueue, SkipsEmptyRows, SkipsOnError, SkipsOnFailure
{
    use SkipsFailures, SkipsErrors;

    private $church;

    public function __construct($slug)
    {
        $this->church = Church::get_church($slug);
    }

    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        //
        Validator::make($collection->toArray(), [
            'name' => 'filled',
            'first_name' => 'filled',
            'email' => 'email',
            'phone' => 'string|min:11'
        ])->validate();
        foreach ($collection as $item) {
            if (!$user = User::where('email', $item['email'] ?? null)->orWhere('phone', $item['phone'] ?? null)->first()) {
                $user = User::create([
                    'name' => trim($item['name'] ?? ($item['first_name'] ?? 'Null') . ' ' . ($item['last_name'] ?? '')),
                    'email' => $item['email'] ?? null,
                    'phone' => $item['phone'] ?? null,
                    'is_active' => true,
                ]);
            }
            ChurchController::add_user_to_church($user, $this->church, 'member');
            $data = [
                //            'date_of_birth' => $item['date_of_birth'] ?? null,
                //            'date_of_marriage' => $item['date_of_marriage'] ?? null,
                'residential_area' => $item['lga'] ?? null,
                'address' => $item['house_address'] ?? null,
                'nearest_bus_stop' => $item['nearest_bus_stop'] ?? null,
            ];
            if ($user->personal_details) {
                $user->personal_details->update($data);
            } else {
                $user->personal_details()->create($data);
            }
        }
    }

    /**
     * @return int
     */
    public function chunkSize(): int
    {
        return 1000;
    }
}
