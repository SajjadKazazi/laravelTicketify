<?php namespace Sajjadkazazi\Ticketify\User;

class RepositoryAbstract
{
    public $selection;

    public function __construct($selection = [])
    {
        $this->selection = $selection;
    }

    protected function getWiths()
    {
        $data = [];
        foreach ($this->selection as $key => $select) {
            if (is_array($select)) {
                $with = $this->getWithsCallback($select);
                if ($with) {
                    foreach ($with as $_with) {
                        $data[] = $key . '.' . $_with;
                    }
                } else {
                    $data[] = $key;
                }
            }
        }

        return $data;
    }

    private function getWithsCallback($selection)
    {
        $with = [];
        foreach ($selection as $key => $select) {
            if (is_array($select)) {
                $_with = $this->getWithsCallback($select);
                if ($_with ) {
                    foreach ($_with as $_w) {
                        $with[] = $key . '.' . $_w;
                    }
                } else {
                    $with[] = $key;
                }
            }
        }

        return $with;
    }
}
