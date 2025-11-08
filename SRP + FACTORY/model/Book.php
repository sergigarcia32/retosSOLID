<?php
class Book
{
    private string $title;
    private string $author;
    private array $pages;
    private int $currentPage = 0;

    public function __construct(string $title, string $author, array $pages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getCurrentPage(): string
    {
        return $this->pages[$this->currentPage] ?? 'Fin del libro';
    }

    public function nextPage(): void
    {
        if ($this->currentPage < count($this->pages) - 1) {
            $this->currentPage++;
        }
    }
}
