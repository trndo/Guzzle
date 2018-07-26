<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 26.07.18
 * Time: 14:29
 */

namespace App\Model;

use Github\Client;

class GitHubInfo
{
    private $client;
    private $name;
    private $user;
    private $repo;
    private $branch=[];

    /**
     * GitHubInfo constructor.
     * @param $name
     * @param $user
     * @param $repo
     * @param array $branch
     */
    public function __construct($client,$name, $user, $repo, array $branch)

    {
        $this->client = $client;
        $this->name = $name;
        $this->user = $user;
        $this->repo = $repo;
        $this->branch = $branch;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client): void
    {
        $this->client = $client;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getRepo()
    {
        return $this->repo;
    }

    /**
     * @param mixed $repo
     */
    public function setRepo($repo): void
    {
        $this->repo = $repo;
    }

    /**
     * @return array
     */
    public function getBranch(): array
    {
        return $this->branch;
    }

    /**
     * @param array $branch
     */
    public function setBranch(array $branch): void
    {
        $this->branch = $branch;
    }

    public function getInfo()
    {
        return $this->client->api($this->name)->commits()->all($this->user, $this->repo, $this->branch);
    }
}