<?php

class Article
{
    public const STATUS_DRAFT = "draft";
    public const STATUS_ARCHIVED = "archived";
    public const STATUS_PUBLISHED = "published";

    private int $id;
    private string $title;
    private string $content;
    private string $status;
    private \DateTime $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime('NOW');
        $this->status = self::STATUS_DRAFT;
    }

    // public function __construct(int $id, string $title, string $content )
    // {
    //     $this->id = $id;
    //     $this->title = $title;
    //     $this->content = $content;
    //     $this->createdAt = new \DateTime('NOW');
    //     $this->status = self::STATUS_DRAFT;
    // }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
