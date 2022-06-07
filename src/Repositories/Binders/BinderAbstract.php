<?php namespace Sajjadkazazi\Ticketify\Binders;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BinderAbstract
{
    protected $selection = [];
    protected $entity;

    abstract public function bind(Model $entity);

    public function __construct($entity, $selection = [])
    {
        $this->entity = $entity;
        $this->selection = $selection;
    }

    public function getBinder() :array
    {
        if(!$this->entity) {
            return [];
        }

        if ($this->entity instanceof Collection || $this->entity instanceof \Illuminate\Support\Collection) {

            return $this->entity->map(function ($entity) {
                return $this->select($this->bind($entity));
            })->toArray();
        }

        return $this->select($this->bind($this->entity));
    }

    protected function hasSelection(string $key)
    {
        return isset($this->selection[$key]);
    }

    private function select(array $entity)
    {
        $data = [];
        if ($this->selection) {
            foreach ($this->selection as $key => $select) {
                $data[$key] = $entity[$key];
            }
        } else {
            $data = $entity;
        }

        return $data;
    }
}
