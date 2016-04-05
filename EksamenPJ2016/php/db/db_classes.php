<?php

class comment {
  public $commentID;
  public $commentContent;
  public $author;
  public $postID;
  public $commentDate;
}

class oppslag {
  public $oppslagID;
  public $oppslagTitle;
  public $oppslagContent;
  public $date_posted;
  public $author;
  public $oppslagType;
}

class user {
  public $userID;
  public $username;
  public $password;
  public $email;
  public $authority_level;
}

class blog_post {
  public $postID;
  public $postTitle;
  public $postContent;
  public $postDate;
  public $author;
  public $type;
}
