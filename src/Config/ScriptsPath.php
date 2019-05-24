<?php declare(strict_types=1);

namespace Shopware\Psh\Config;

class ScriptsPath
{
    /**
     * @var string
     */
    private $namespace;

    /**
     * @var bool
     */
    private $hidden;

    /**
     * @var string
     */
    private $path;

    /**
     * @param string $path
     * @param bool $hidden
     * @param string $namespace
     */
    public function __construct(string $path, bool $hidden, string $namespace = null)
    {
        $this->namespace = $namespace;
        $this->hidden = $hidden;
        $this->path = $path;
    }

    /**
     * @return string|null
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return bool
     */
    public function isHidden(): bool
    {
        return $this->hidden;
    }
}
