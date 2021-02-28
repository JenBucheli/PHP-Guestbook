<?php


class PostLoader {

    private array $postsData=[] ;

    public function getData ()
    {
        $serialized = file_get_contents('post.txt');
        $post = unserialize($serialized);
        $this->postsData[]=$post;
        return $this->postsData;
    }


    public function saveData(Post $post){

        array_push($this->postsData,$post);
        $serialize = serialize($this->postsData);
        file_put_contents('post.txt',$serialize);
    }




}