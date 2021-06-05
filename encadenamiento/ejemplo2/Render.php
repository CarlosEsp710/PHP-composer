<?php

require "Slug.php";

class Render
{
    public function sanitize()
    {
        $slug = new Slug;
        return $slug;
    }
}
