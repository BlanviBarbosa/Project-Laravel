<?php

namespace ProjectLaravel\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use ProjectLaravel\Repositories\ProjectRepository;
use ProjectLaravel\Entities\Project;
use ProjectLaravel\Validators\ProjectValidator;

/**
 * Class ProjectRepositoryEloquent.
 *
 * @package namespace ProjectLaravel\Repositories;
 */
class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Project::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
