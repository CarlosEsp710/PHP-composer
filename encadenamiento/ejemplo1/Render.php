<?php

class Render
{
    protected $data = [];
    protected $built = null;

    public function words(array $data)
    {
        foreach ($data as $word) {
            $this->data[] = $word;
        }

        return $this;
    }

    public function link($character)
    {
        foreach ($this->data as $word) {
            $this->built .= $word . $character;
        }

        return $this;
    }

    public function get()
    {
        return $this->built;
    }
}
