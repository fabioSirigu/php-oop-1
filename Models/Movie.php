<?php

class Movie
{
      public $title;
      public $duration;
      public $genre;
      public $type;

      public function __construct(string $title, string $duration, array $genre)
      {
            $this->title = $title;
            $this->duration = $duration;
            $this->genre = $genre;
            $this->setType($duration);
      }

      public function setType($duration)
      {
            if ($duration > 120) {
                  $this->type = 'long film';
            } else {
                  $this->type = 'short film';
            }
      }

      public function getType()
      {
            return $this->type;
      }
};
