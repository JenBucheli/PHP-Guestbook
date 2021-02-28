<?php

class Post
{
    private string $title;
    private string $date;
    private string $content;
    private string $authorName;

    public function __construct(string$title,string $date,string $content,string$authorName){
        $this->title = $title;
        $this->title = $content;
        $this->authorName = $authorName;
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthorName(): string
    {
        return $this->authorName;
    }


    public function getDate():string
    {

        return $this->date;
    }

}