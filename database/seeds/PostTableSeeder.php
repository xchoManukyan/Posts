<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'Some awesome heading';
        $post->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo.';
        $post->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.

        Suspendisse vitae diam id orci accumsan tempus eu a odio. Nulla bibendum elementum arcu ut dignissim. Phasellus tincidunt magna sed sem consectetur, sed hendrerit lacus elementum. Proin tellus nisl, elementum ac nunc laoreet, tempus dapibus mauris. Vivamus porta nulla sit amet accumsan tristique. Aenean facilisis hendrerit lacus, vulputate viverra sapien. Curabitur ac leo pretium, consectetur libero sed, efficitur nunc. Integer nibh metus, suscipit quis sagittis quis, consectetur at libero.
        
        In sed velit scelerisque, molestie ex sed, viverra felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus lacinia commodo eros, vitae efficitur leo convallis non. Nam finibus at dolor vitae congue. Mauris vitae libero vel massa mollis sollicitudin. Morbi porttitor ornare lectus vel tempor. Donec risus libero, auctor id auctor quis, placerat quis lacus. Fusce imperdiet vulputate massa, id venenatis ligula suscipit sit amet. Nam sit amet accumsan turpis. Cras dignissim bibendum ipsum, non varius diam auctor sed. Proin tincidunt elit eu sodales varius. Vestibulum placerat leo at maximus auctor.
        
        Donec arcu erat, lobortis at dolor eget, hendrerit ultrices nisi. Curabitur velit augue, condimentum sed aliquam eget, molestie eget augue. In erat orci, ullamcorper eget auctor eu, hendrerit at sem. Nulla mattis commodo nunc, vel faucibus velit egestas ut. Curabitur ornare tortor in nibh semper, quis bibendum elit ultricies. Fusce in convallis augue. Vivamus efficitur ligula sed purus tincidunt, ut faucibus lorem feugiat. Phasellus pretium tristique nisl, vel commodo tortor bibendum sed. Suspendisse aliquet justo non neque malesuada tincidunt. Proin imperdiet ligula eget orci condimentum, non molestie enim facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium dolor eu elit viverra imperdiet. Sed purus magna, pulvinar in vehicula et, vehicula dapibus orci. Cras porttitor non mi ac pretium. Cras quis dapibus tortor.
        
        Proin sed iaculis diam. Aenean faucibus ipsum sit amet urna commodo finibus. Morbi vitae turpis vel neque interdum congue. Maecenas varius vel purus sed ultrices. Ut ut enim dolor. Nullam vitae metus luctus, auctor mauris a, consectetur lacus. Vivamus dictum velit vel arcu viverra auctor. Maecenas vitae accumsan quam. Suspendisse sit amet ex commodo, dignissim mauris vitae, posuere sem. Quisque eget felis vel dolor elementum venenatis. Aliquam et justo gravida velit tristique finibus ut ac eros. Pellentesque venenatis ac orci eget eleifend. Phasellus suscipit quam mi, et dapibus turpis viverra non. Nam maximus enim et dapibus auctor. Nunc euismod bibendum urna, ac euismod augue maximus aliquam. Sed risus neque, aliquam vel nibh ac, accumsan rhoncus enim.';
        $post->poster = 'storage/posts/bjn9OzV9UNop07ROTkMFxex1AiIhxTq2at3Zrez8.jpeg';
        $post->slug = 'some-awesome-heading';
        $post->category_id = 0;
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = 'Some awesome heading';
        $post->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo.';
        $post->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.

        Suspendisse vitae diam id orci accumsan tempus eu a odio. Nulla bibendum elementum arcu ut dignissim. Phasellus tincidunt magna sed sem consectetur, sed hendrerit lacus elementum. Proin tellus nisl, elementum ac nunc laoreet, tempus dapibus mauris. Vivamus porta nulla sit amet accumsan tristique. Aenean facilisis hendrerit lacus, vulputate viverra sapien. Curabitur ac leo pretium, consectetur libero sed, efficitur nunc. Integer nibh metus, suscipit quis sagittis quis, consectetur at libero.
        
        In sed velit scelerisque, molestie ex sed, viverra felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus lacinia commodo eros, vitae efficitur leo convallis non. Nam finibus at dolor vitae congue. Mauris vitae libero vel massa mollis sollicitudin. Morbi porttitor ornare lectus vel tempor. Donec risus libero, auctor id auctor quis, placerat quis lacus. Fusce imperdiet vulputate massa, id venenatis ligula suscipit sit amet. Nam sit amet accumsan turpis. Cras dignissim bibendum ipsum, non varius diam auctor sed. Proin tincidunt elit eu sodales varius. Vestibulum placerat leo at maximus auctor.
        
        Donec arcu erat, lobortis at dolor eget, hendrerit ultrices nisi. Curabitur velit augue, condimentum sed aliquam eget, molestie eget augue. In erat orci, ullamcorper eget auctor eu, hendrerit at sem. Nulla mattis commodo nunc, vel faucibus velit egestas ut. Curabitur ornare tortor in nibh semper, quis bibendum elit ultricies. Fusce in convallis augue. Vivamus efficitur ligula sed purus tincidunt, ut faucibus lorem feugiat. Phasellus pretium tristique nisl, vel commodo tortor bibendum sed. Suspendisse aliquet justo non neque malesuada tincidunt. Proin imperdiet ligula eget orci condimentum, non molestie enim facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium dolor eu elit viverra imperdiet. Sed purus magna, pulvinar in vehicula et, vehicula dapibus orci. Cras porttitor non mi ac pretium. Cras quis dapibus tortor.
        
        Proin sed iaculis diam. Aenean faucibus ipsum sit amet urna commodo finibus. Morbi vitae turpis vel neque interdum congue. Maecenas varius vel purus sed ultrices. Ut ut enim dolor. Nullam vitae metus luctus, auctor mauris a, consectetur lacus. Vivamus dictum velit vel arcu viverra auctor. Maecenas vitae accumsan quam. Suspendisse sit amet ex commodo, dignissim mauris vitae, posuere sem. Quisque eget felis vel dolor elementum venenatis. Aliquam et justo gravida velit tristique finibus ut ac eros. Pellentesque venenatis ac orci eget eleifend. Phasellus suscipit quam mi, et dapibus turpis viverra non. Nam maximus enim et dapibus auctor. Nunc euismod bibendum urna, ac euismod augue maximus aliquam. Sed risus neque, aliquam vel nibh ac, accumsan rhoncus enim.';
        $post->poster = 'storage/posts/vqxBdXQsTeZDxeRrkQVRZlp3UgciZrSA0zNqxrJ9.jpeg';
        $post->slug = 'some-awesome-heading-1';
        $post->category_id = 0;
        $post->user_id = 2;
        $post->save();

        $post = new Post();
        $post->title = 'Some awesome heading';
        $post->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo.';
        $post->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.

        Suspendisse vitae diam id orci accumsan tempus eu a odio. Nulla bibendum elementum arcu ut dignissim. Phasellus tincidunt magna sed sem consectetur, sed hendrerit lacus elementum. Proin tellus nisl, elementum ac nunc laoreet, tempus dapibus mauris. Vivamus porta nulla sit amet accumsan tristique. Aenean facilisis hendrerit lacus, vulputate viverra sapien. Curabitur ac leo pretium, consectetur libero sed, efficitur nunc. Integer nibh metus, suscipit quis sagittis quis, consectetur at libero.
        
        In sed velit scelerisque, molestie ex sed, viverra felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus lacinia commodo eros, vitae efficitur leo convallis non. Nam finibus at dolor vitae congue. Mauris vitae libero vel massa mollis sollicitudin. Morbi porttitor ornare lectus vel tempor. Donec risus libero, auctor id auctor quis, placerat quis lacus. Fusce imperdiet vulputate massa, id venenatis ligula suscipit sit amet. Nam sit amet accumsan turpis. Cras dignissim bibendum ipsum, non varius diam auctor sed. Proin tincidunt elit eu sodales varius. Vestibulum placerat leo at maximus auctor.
        
        Donec arcu erat, lobortis at dolor eget, hendrerit ultrices nisi. Curabitur velit augue, condimentum sed aliquam eget, molestie eget augue. In erat orci, ullamcorper eget auctor eu, hendrerit at sem. Nulla mattis commodo nunc, vel faucibus velit egestas ut. Curabitur ornare tortor in nibh semper, quis bibendum elit ultricies. Fusce in convallis augue. Vivamus efficitur ligula sed purus tincidunt, ut faucibus lorem feugiat. Phasellus pretium tristique nisl, vel commodo tortor bibendum sed. Suspendisse aliquet justo non neque malesuada tincidunt. Proin imperdiet ligula eget orci condimentum, non molestie enim facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium dolor eu elit viverra imperdiet. Sed purus magna, pulvinar in vehicula et, vehicula dapibus orci. Cras porttitor non mi ac pretium. Cras quis dapibus tortor.
        
        Proin sed iaculis diam. Aenean faucibus ipsum sit amet urna commodo finibus. Morbi vitae turpis vel neque interdum congue. Maecenas varius vel purus sed ultrices. Ut ut enim dolor. Nullam vitae metus luctus, auctor mauris a, consectetur lacus. Vivamus dictum velit vel arcu viverra auctor. Maecenas vitae accumsan quam. Suspendisse sit amet ex commodo, dignissim mauris vitae, posuere sem. Quisque eget felis vel dolor elementum venenatis. Aliquam et justo gravida velit tristique finibus ut ac eros. Pellentesque venenatis ac orci eget eleifend. Phasellus suscipit quam mi, et dapibus turpis viverra non. Nam maximus enim et dapibus auctor. Nunc euismod bibendum urna, ac euismod augue maximus aliquam. Sed risus neque, aliquam vel nibh ac, accumsan rhoncus enim.';
        $post->poster = 'storage/posts/H1BexyaZyyCeDuicxUd8YbX6dkQEQ7i1yjZ6dUoi.jpeg';
        $post->slug = 'some-awesome-heading-2';
        $post->category_id = 0;
        $post->user_id = 3;
        $post->save();

        $post = new Post();
        $post->title = 'Some awesome heading';
        $post->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo.';
        $post->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.

        Suspendisse vitae diam id orci accumsan tempus eu a odio. Nulla bibendum elementum arcu ut dignissim. Phasellus tincidunt magna sed sem consectetur, sed hendrerit lacus elementum. Proin tellus nisl, elementum ac nunc laoreet, tempus dapibus mauris. Vivamus porta nulla sit amet accumsan tristique. Aenean facilisis hendrerit lacus, vulputate viverra sapien. Curabitur ac leo pretium, consectetur libero sed, efficitur nunc. Integer nibh metus, suscipit quis sagittis quis, consectetur at libero.
        
        In sed velit scelerisque, molestie ex sed, viverra felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus lacinia commodo eros, vitae efficitur leo convallis non. Nam finibus at dolor vitae congue. Mauris vitae libero vel massa mollis sollicitudin. Morbi porttitor ornare lectus vel tempor. Donec risus libero, auctor id auctor quis, placerat quis lacus. Fusce imperdiet vulputate massa, id venenatis ligula suscipit sit amet. Nam sit amet accumsan turpis. Cras dignissim bibendum ipsum, non varius diam auctor sed. Proin tincidunt elit eu sodales varius. Vestibulum placerat leo at maximus auctor.
        
        Donec arcu erat, lobortis at dolor eget, hendrerit ultrices nisi. Curabitur velit augue, condimentum sed aliquam eget, molestie eget augue. In erat orci, ullamcorper eget auctor eu, hendrerit at sem. Nulla mattis commodo nunc, vel faucibus velit egestas ut. Curabitur ornare tortor in nibh semper, quis bibendum elit ultricies. Fusce in convallis augue. Vivamus efficitur ligula sed purus tincidunt, ut faucibus lorem feugiat. Phasellus pretium tristique nisl, vel commodo tortor bibendum sed. Suspendisse aliquet justo non neque malesuada tincidunt. Proin imperdiet ligula eget orci condimentum, non molestie enim facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium dolor eu elit viverra imperdiet. Sed purus magna, pulvinar in vehicula et, vehicula dapibus orci. Cras porttitor non mi ac pretium. Cras quis dapibus tortor.
        
        Proin sed iaculis diam. Aenean faucibus ipsum sit amet urna commodo finibus. Morbi vitae turpis vel neque interdum congue. Maecenas varius vel purus sed ultrices. Ut ut enim dolor. Nullam vitae metus luctus, auctor mauris a, consectetur lacus. Vivamus dictum velit vel arcu viverra auctor. Maecenas vitae accumsan quam. Suspendisse sit amet ex commodo, dignissim mauris vitae, posuere sem. Quisque eget felis vel dolor elementum venenatis. Aliquam et justo gravida velit tristique finibus ut ac eros. Pellentesque venenatis ac orci eget eleifend. Phasellus suscipit quam mi, et dapibus turpis viverra non. Nam maximus enim et dapibus auctor. Nunc euismod bibendum urna, ac euismod augue maximus aliquam. Sed risus neque, aliquam vel nibh ac, accumsan rhoncus enim.';
        $post->poster = 'storage/posts/mrVRONHW5vPjUN8snmLOwa8QmmnxtygYrKSzAl7k.jpeg';
        $post->slug = 'some-awesome-heading-3';
        $post->category_id = 0;
        $post->user_id = 4;
        $post->save();

        $post = new Post();
        $post->title = 'Some awesome heading';
        $post->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo.';
        $post->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.

        Suspendisse vitae diam id orci accumsan tempus eu a odio. Nulla bibendum elementum arcu ut dignissim. Phasellus tincidunt magna sed sem consectetur, sed hendrerit lacus elementum. Proin tellus nisl, elementum ac nunc laoreet, tempus dapibus mauris. Vivamus porta nulla sit amet accumsan tristique. Aenean facilisis hendrerit lacus, vulputate viverra sapien. Curabitur ac leo pretium, consectetur libero sed, efficitur nunc. Integer nibh metus, suscipit quis sagittis quis, consectetur at libero.
        
        In sed velit scelerisque, molestie ex sed, viverra felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus lacinia commodo eros, vitae efficitur leo convallis non. Nam finibus at dolor vitae congue. Mauris vitae libero vel massa mollis sollicitudin. Morbi porttitor ornare lectus vel tempor. Donec risus libero, auctor id auctor quis, placerat quis lacus. Fusce imperdiet vulputate massa, id venenatis ligula suscipit sit amet. Nam sit amet accumsan turpis. Cras dignissim bibendum ipsum, non varius diam auctor sed. Proin tincidunt elit eu sodales varius. Vestibulum placerat leo at maximus auctor.
        
        Donec arcu erat, lobortis at dolor eget, hendrerit ultrices nisi. Curabitur velit augue, condimentum sed aliquam eget, molestie eget augue. In erat orci, ullamcorper eget auctor eu, hendrerit at sem. Nulla mattis commodo nunc, vel faucibus velit egestas ut. Curabitur ornare tortor in nibh semper, quis bibendum elit ultricies. Fusce in convallis augue. Vivamus efficitur ligula sed purus tincidunt, ut faucibus lorem feugiat. Phasellus pretium tristique nisl, vel commodo tortor bibendum sed. Suspendisse aliquet justo non neque malesuada tincidunt. Proin imperdiet ligula eget orci condimentum, non molestie enim facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium dolor eu elit viverra imperdiet. Sed purus magna, pulvinar in vehicula et, vehicula dapibus orci. Cras porttitor non mi ac pretium. Cras quis dapibus tortor.
        
        Proin sed iaculis diam. Aenean faucibus ipsum sit amet urna commodo finibus. Morbi vitae turpis vel neque interdum congue. Maecenas varius vel purus sed ultrices. Ut ut enim dolor. Nullam vitae metus luctus, auctor mauris a, consectetur lacus. Vivamus dictum velit vel arcu viverra auctor. Maecenas vitae accumsan quam. Suspendisse sit amet ex commodo, dignissim mauris vitae, posuere sem. Quisque eget felis vel dolor elementum venenatis. Aliquam et justo gravida velit tristique finibus ut ac eros. Pellentesque venenatis ac orci eget eleifend. Phasellus suscipit quam mi, et dapibus turpis viverra non. Nam maximus enim et dapibus auctor. Nunc euismod bibendum urna, ac euismod augue maximus aliquam. Sed risus neque, aliquam vel nibh ac, accumsan rhoncus enim.';
        $post->poster = 'storage/posts/VFbD9xsOxdef0i5YVAJr5JymAAm0kHK2ddzrGg4W.jpeg';
        $post->slug = 'some-awesome-heading-4';
        $post->category_id = 0;
        $post->user_id = 5;
        $post->save();

        $post = new Post();
        $post->title = 'Some awesome heading';
        $post->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo.';
        $post->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.

        Suspendisse vitae diam id orci accumsan tempus eu a odio. Nulla bibendum elementum arcu ut dignissim. Phasellus tincidunt magna sed sem consectetur, sed hendrerit lacus elementum. Proin tellus nisl, elementum ac nunc laoreet, tempus dapibus mauris. Vivamus porta nulla sit amet accumsan tristique. Aenean facilisis hendrerit lacus, vulputate viverra sapien. Curabitur ac leo pretium, consectetur libero sed, efficitur nunc. Integer nibh metus, suscipit quis sagittis quis, consectetur at libero.
        
        In sed velit scelerisque, molestie ex sed, viverra felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus lacinia commodo eros, vitae efficitur leo convallis non. Nam finibus at dolor vitae congue. Mauris vitae libero vel massa mollis sollicitudin. Morbi porttitor ornare lectus vel tempor. Donec risus libero, auctor id auctor quis, placerat quis lacus. Fusce imperdiet vulputate massa, id venenatis ligula suscipit sit amet. Nam sit amet accumsan turpis. Cras dignissim bibendum ipsum, non varius diam auctor sed. Proin tincidunt elit eu sodales varius. Vestibulum placerat leo at maximus auctor.
        
        Donec arcu erat, lobortis at dolor eget, hendrerit ultrices nisi. Curabitur velit augue, condimentum sed aliquam eget, molestie eget augue. In erat orci, ullamcorper eget auctor eu, hendrerit at sem. Nulla mattis commodo nunc, vel faucibus velit egestas ut. Curabitur ornare tortor in nibh semper, quis bibendum elit ultricies. Fusce in convallis augue. Vivamus efficitur ligula sed purus tincidunt, ut faucibus lorem feugiat. Phasellus pretium tristique nisl, vel commodo tortor bibendum sed. Suspendisse aliquet justo non neque malesuada tincidunt. Proin imperdiet ligula eget orci condimentum, non molestie enim facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium dolor eu elit viverra imperdiet. Sed purus magna, pulvinar in vehicula et, vehicula dapibus orci. Cras porttitor non mi ac pretium. Cras quis dapibus tortor.
        
        Proin sed iaculis diam. Aenean faucibus ipsum sit amet urna commodo finibus. Morbi vitae turpis vel neque interdum congue. Maecenas varius vel purus sed ultrices. Ut ut enim dolor. Nullam vitae metus luctus, auctor mauris a, consectetur lacus. Vivamus dictum velit vel arcu viverra auctor. Maecenas vitae accumsan quam. Suspendisse sit amet ex commodo, dignissim mauris vitae, posuere sem. Quisque eget felis vel dolor elementum venenatis. Aliquam et justo gravida velit tristique finibus ut ac eros. Pellentesque venenatis ac orci eget eleifend. Phasellus suscipit quam mi, et dapibus turpis viverra non. Nam maximus enim et dapibus auctor. Nunc euismod bibendum urna, ac euismod augue maximus aliquam. Sed risus neque, aliquam vel nibh ac, accumsan rhoncus enim.';
        $post->poster = 'storage/posts/H9WbtoPHQMVqZkcB9rDMLcGhHKsvEZWEHCdBb6wL.jpeg';
        $post->slug = 'some-awesome-heading-5';
        $post->category_id = 0;
        $post->user_id = 6;
        $post->save();

        $post = new Post();
        $post->title = 'Some awesome heading';
        $post->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo.';
        $post->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.

        Suspendisse vitae diam id orci accumsan tempus eu a odio. Nulla bibendum elementum arcu ut dignissim. Phasellus tincidunt magna sed sem consectetur, sed hendrerit lacus elementum. Proin tellus nisl, elementum ac nunc laoreet, tempus dapibus mauris. Vivamus porta nulla sit amet accumsan tristique. Aenean facilisis hendrerit lacus, vulputate viverra sapien. Curabitur ac leo pretium, consectetur libero sed, efficitur nunc. Integer nibh metus, suscipit quis sagittis quis, consectetur at libero.
        
        In sed velit scelerisque, molestie ex sed, viverra felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus lacinia commodo eros, vitae efficitur leo convallis non. Nam finibus at dolor vitae congue. Mauris vitae libero vel massa mollis sollicitudin. Morbi porttitor ornare lectus vel tempor. Donec risus libero, auctor id auctor quis, placerat quis lacus. Fusce imperdiet vulputate massa, id venenatis ligula suscipit sit amet. Nam sit amet accumsan turpis. Cras dignissim bibendum ipsum, non varius diam auctor sed. Proin tincidunt elit eu sodales varius. Vestibulum placerat leo at maximus auctor.
        
        Donec arcu erat, lobortis at dolor eget, hendrerit ultrices nisi. Curabitur velit augue, condimentum sed aliquam eget, molestie eget augue. In erat orci, ullamcorper eget auctor eu, hendrerit at sem. Nulla mattis commodo nunc, vel faucibus velit egestas ut. Curabitur ornare tortor in nibh semper, quis bibendum elit ultricies. Fusce in convallis augue. Vivamus efficitur ligula sed purus tincidunt, ut faucibus lorem feugiat. Phasellus pretium tristique nisl, vel commodo tortor bibendum sed. Suspendisse aliquet justo non neque malesuada tincidunt. Proin imperdiet ligula eget orci condimentum, non molestie enim facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium dolor eu elit viverra imperdiet. Sed purus magna, pulvinar in vehicula et, vehicula dapibus orci. Cras porttitor non mi ac pretium. Cras quis dapibus tortor.
        
        Proin sed iaculis diam. Aenean faucibus ipsum sit amet urna commodo finibus. Morbi vitae turpis vel neque interdum congue. Maecenas varius vel purus sed ultrices. Ut ut enim dolor. Nullam vitae metus luctus, auctor mauris a, consectetur lacus. Vivamus dictum velit vel arcu viverra auctor. Maecenas vitae accumsan quam. Suspendisse sit amet ex commodo, dignissim mauris vitae, posuere sem. Quisque eget felis vel dolor elementum venenatis. Aliquam et justo gravida velit tristique finibus ut ac eros. Pellentesque venenatis ac orci eget eleifend. Phasellus suscipit quam mi, et dapibus turpis viverra non. Nam maximus enim et dapibus auctor. Nunc euismod bibendum urna, ac euismod augue maximus aliquam. Sed risus neque, aliquam vel nibh ac, accumsan rhoncus enim.';
        $post->poster = 'storage/posts/DAVHfdO0I4WvS4apWDr63p5RpNVYe1B9bllPoOuu.jpeg';
        $post->slug = 'some-awesome-heading-6';
        $post->category_id = 0;
        $post->user_id = 3;
        $post->save();

        $post = new Post();
        $post->title = 'Some awesome heading';
        $post->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo.';
        $post->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.

        Suspendisse vitae diam id orci accumsan tempus eu a odio. Nulla bibendum elementum arcu ut dignissim. Phasellus tincidunt magna sed sem consectetur, sed hendrerit lacus elementum. Proin tellus nisl, elementum ac nunc laoreet, tempus dapibus mauris. Vivamus porta nulla sit amet accumsan tristique. Aenean facilisis hendrerit lacus, vulputate viverra sapien. Curabitur ac leo pretium, consectetur libero sed, efficitur nunc. Integer nibh metus, suscipit quis sagittis quis, consectetur at libero.
        
        In sed velit scelerisque, molestie ex sed, viverra felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus lacinia commodo eros, vitae efficitur leo convallis non. Nam finibus at dolor vitae congue. Mauris vitae libero vel massa mollis sollicitudin. Morbi porttitor ornare lectus vel tempor. Donec risus libero, auctor id auctor quis, placerat quis lacus. Fusce imperdiet vulputate massa, id venenatis ligula suscipit sit amet. Nam sit amet accumsan turpis. Cras dignissim bibendum ipsum, non varius diam auctor sed. Proin tincidunt elit eu sodales varius. Vestibulum placerat leo at maximus auctor.
        
        Donec arcu erat, lobortis at dolor eget, hendrerit ultrices nisi. Curabitur velit augue, condimentum sed aliquam eget, molestie eget augue. In erat orci, ullamcorper eget auctor eu, hendrerit at sem. Nulla mattis commodo nunc, vel faucibus velit egestas ut. Curabitur ornare tortor in nibh semper, quis bibendum elit ultricies. Fusce in convallis augue. Vivamus efficitur ligula sed purus tincidunt, ut faucibus lorem feugiat. Phasellus pretium tristique nisl, vel commodo tortor bibendum sed. Suspendisse aliquet justo non neque malesuada tincidunt. Proin imperdiet ligula eget orci condimentum, non molestie enim facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium dolor eu elit viverra imperdiet. Sed purus magna, pulvinar in vehicula et, vehicula dapibus orci. Cras porttitor non mi ac pretium. Cras quis dapibus tortor.
        
        Proin sed iaculis diam. Aenean faucibus ipsum sit amet urna commodo finibus. Morbi vitae turpis vel neque interdum congue. Maecenas varius vel purus sed ultrices. Ut ut enim dolor. Nullam vitae metus luctus, auctor mauris a, consectetur lacus. Vivamus dictum velit vel arcu viverra auctor. Maecenas vitae accumsan quam. Suspendisse sit amet ex commodo, dignissim mauris vitae, posuere sem. Quisque eget felis vel dolor elementum venenatis. Aliquam et justo gravida velit tristique finibus ut ac eros. Pellentesque venenatis ac orci eget eleifend. Phasellus suscipit quam mi, et dapibus turpis viverra non. Nam maximus enim et dapibus auctor. Nunc euismod bibendum urna, ac euismod augue maximus aliquam. Sed risus neque, aliquam vel nibh ac, accumsan rhoncus enim.';
        $post->poster = 'storage/posts/CRFur9EvLoHbwLL5h0htxHv3u0RqMrgnW3fwA4Lb.jpeg';
        $post->slug = 'some-awesome-heading-7';
        $post->category_id = 0;
        $post->user_id = 5;
        $post->save();

    }
}
