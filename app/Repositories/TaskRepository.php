<?php


namespace App\Repositories;


use App\Models\Task;

class TaskRepository extends BaseRepository
{
    public function __construct(Task $entity)
    {
        $this->entity = $entity;
    }
}
