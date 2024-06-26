<?php

namespace Modules\UserManagement\Http\Controllers\Web\New\Admin;

use App\Http\Controllers\BaseController;
use App\Service\BaseServiceInterface;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\UserManagement\Http\Requests\LevelAccessStoreOrUpdateRequest;
use Modules\UserManagement\Service\Interface\LevelAccessServiceInterface;
use Modules\UserManagement\Service\LevelAccessService;

class LevelAccessController extends BaseController
{
    protected $levelAccessService;

    public function __construct(LevelAccessServiceInterface $levelAccessService)
    {
        parent::__construct($levelAccessService);
        $this->levelAccessService = $levelAccessService;
    }

    public function index(?Request $request, string $type = null): View|Collection|LengthAwarePaginator|null|callable|RedirectResponse
    {
        return parent::index($request, $type); // TODO: Change the autogenerated stub
    }

    public function store(LevelAccessStoreOrUpdateRequest $request)
    {
        return response()->json($this->levelAccessService->update(id: $request->id, data: $request->validated()));
    }
}
