<?php
declare(strict_types=1);

namespace TogglJira\Options;

use Zend\Stdlib\AbstractOptions;

class SyncOptions extends AbstractOptions
{
    /**
     * @var \DateTimeInterface
     */
    private $lastSync;

    /**
     * @var string
     */
    private $jiraUsername;

    /**
     * @var string
     */
    private $jiraPassword;

    /**
     * @var string
     */
    private $togglApiKey;

    /**
     * @var string
     */
    private $jiraUrl;

    public function __construct($options = null)
    {
        $this->lastSync = new \DateTimeImmutable('-1 day');

        parent::__construct($options);
    }

    /**
     * @return string
     */
    public function getTogglApiKey(): string
    {
        return $this->togglApiKey;
    }

    /**
     * @param string $togglApiKey
     */
    public function setTogglApiKey(string $togglApiKey): void
    {
        $this->togglApiKey = $togglApiKey;
    }

    /**
     * @return string
     */
    public function getJiraPassword(): string
    {
        return $this->jiraPassword;
    }

    /**
     * @param string $jiraPassword
     */
    public function setJiraPassword(string $jiraPassword): void
    {
        $this->jiraPassword = $jiraPassword;
    }

    /**
     * @return string
     */
    public function getJiraUsername(): string
    {
        return $this->jiraUsername;
    }

    /**
     * @param string $jiraUsername
     */
    public function setJiraUsername(string $jiraUsername): void
    {
        $this->jiraUsername = $jiraUsername;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastSync(): \DateTimeInterface
    {
        return $this->lastSync;
    }

    /**
     * @param \DateTimeInterface $lastSync
     */
    public function setLastSync(\DateTimeInterface $lastSync): void
    {
        $this->lastSync = $lastSync;
    }

    /**
     * @return string
     */
    public function getJiraUrl(): string
    {
        return $this->jiraUrl;
    }

    /**
     * @param string $jiraUrl
     */
    public function setJiraUrl(string $jiraUrl): void
    {
        $this->jiraUrl = $jiraUrl;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'lastSync' => $this->getLastSync(),
            'jiraUrl' => $this->getJiraUrl(),
            'jiraUsername' => $this->getJiraUsername(),
            'jiraPassword' => $this->getJiraPassword(),
            'togglApiKey' => $this->getTogglApiKey(),
        ];
    }
}
