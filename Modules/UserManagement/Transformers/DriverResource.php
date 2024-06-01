<?php

namespace Modules\UserManagement\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\VehicleManagement\Transformers\VehicleResource;

class DriverResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'first_name' => $this?->first_name,
            'last_name' => $this?->last_name,
            'level' => DriverLevelResource::make($this->whenLoaded('level')),
            'vehicle' => VehicleResource::make($this->whenLoaded('vehicle')),
            'email' => $this->email,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'identification_number' => $this->identification_number,
            'identification_type' => $this->identification_type,
            'identification_image' => $this->identification_image,
            'old_identification_image' => $this->old_identification_image,
            'other_documents' => $this->other_documents,
            'date_of_birth' => $this->date_of_birth,
            'profile_image' => $this->profile_image,
            'fcm_token' => $this->fcm_token,
            'phone_verified_at' => $this->phone_verified_at,
            'email_verified_at' => $this->email_verified_at,
            'user_type' => $this->user_type,
            'remember_token' => $this->remember_token,
            'is_active' => $this->is_active,
            'is_online' => $this->is_online,
            'details' => $this->whenLoaded('driverDetails'),
            'time_track' => TimeTrackResource::make($this->whenLoaded('latestTrack')),
            'last_location' => $this->whenLoaded('lastLocations'),
            'vehicle_status' => $this->vehicleStatus(),
            'loyalty_points' => $this->loyalty_points,
            'wallet' => UserAccountResource::make($this->whenLoaded('userAccount')),
            'rating' => round($this->received_reviews_avg_rating, 1),
        ];
    }
}
