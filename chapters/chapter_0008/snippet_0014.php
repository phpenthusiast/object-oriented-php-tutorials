<?php
$user1 = new AuthorEditor();
$user1 -> setUsername("Balthazar");
$user1 -> setAuthorPrivileges(array("write text", "add punctuation"));
$user1 -> setEditorPrivileges(array("edit text", "edit punctuation"));
