<?php

namespace RefactoringGuru\Prototype\RealWorld;

/**
 * Prototype Design Pattern
 *
 * Intent: Lets you copy existing objects without making your code dependent on
 * their classes.
 *
 * Example: The Prototype pattern provides a convenient way to replicate
 * existing objects instead of reconstructing them and copying over all of their
 * fields directly. The direct approach not only couples you to the classes of
 * the objects being cloned, but also doesn't allow you to copy the contents of
 * the private fields. The Prototype pattern lets you perform the cloning within
 * the context of the cloned class, where the access to the class' private
 * fields is not restricted.
 *
 * This example shows you how to clone a complex Page object using the Prototype
 * pattern. The Page class has lots of private fields, which will be carried
 * over to the cloned object thanks to the Prototype pattern.
 */

/**
 * Prototype.
 */
class Page
{
    private $title;

    private $body;

    /**
     * @var Author
     */
    private $author;

    private $comments = [];

    /**
     * @var \DateTime
     */
    private $date;

    // +100 private fields.

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = new \DateTime();
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }
    public function getBody()
    {
        return $this->body;
    }

    public function setBody($te)
    {
        $this->body = $te;
    }

    /**
     * You can control what data you want to carry over to the cloned object.
     *
     * For instance, when a page is cloned:
     * - It gets a new "Copy of ..." title.
     * - The author of the page remains the same. Therefore we leave the
     * reference to the existing object while adding the cloned page to the list
     * of the author's pages.
     * - We don't carry over the comments from the old page.
     * - We also attach a new date object to the page.
     */
    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime();
    }
}

class Author
{
    private $name;

    /**
     * @var Page[]
     */
    private $pages = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }
}

/**
 * The client code.
 */
function clientCode()
{
    $author = new Author("John Smith");
    $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

    // ...

    $page->addComment("Nice tip, thanks!");

    // ...

    $draft = clone $page;

    $draft2 = clone $page;
    echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";
    $draft->addComment("sfdsafsdf");
    $draft2->setBody("sdfsdf");
    echo "<pre>";
    print_r($draft2);


    echo "</pre>";
}

clientCode();
