<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post_()
    {
        $post = new Post();

        $comment = new Comment();

        $post->addComment($comment); //agregamos los comentarios

        $this->assertEquals(1, $post->countComments()); //contamos los comentarios

        $this->assertInstanceOf(Comment::class, $post->getComments()[0]); //obtenemos los comentarios
    }
}