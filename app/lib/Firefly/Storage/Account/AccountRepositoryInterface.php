<?php


namespace Firefly\Storage\Account;

/**
 * Interface AccountRepositoryInterface
 *
 * @package Firefly\Storage\Account
 */
interface AccountRepositoryInterface
{

    /**
     * @return mixed
     */
    public function count();

    /**
     * @param              $name
     * @param \AccountType $type
     *
     * @return mixed
     */
    public function createOrFind($name, \AccountType $type);

    /**
     * @param $name
     *
     * @return mixed
     */
    public function createOrFindBeneficiary($name);

    /**
     * @param \Account $account
     *
     * @return mixed
     */
    public function destroy(\Account $account);

    /**
     * @param $accountId
     *
     * @return mixed
     */
    public function find($accountId);

    /**
     * @param $type
     * @return mixed
     */
    public function findAccountType($type);

    /**
     * @param $name
     * @param \AccountType $type
     * @return mixed
     */
    public function findByName($name, \AccountType $type = null);

    /**
     * @param $name
     * @return mixed
     */
    public function findByNameAny($name);

    /**
     * @return mixed
     */
    public function get();

    /**
     * @return mixed
     */
    public function getActiveDefault();

    /**
     * @return mixed
     */
    public function getActiveDefaultAsSelectList();

    /**
     * @return mixed
     */
    public function getBeneficiaries();

    /**
     * @param $ids
     *
     * @return mixed
     */
    public function getByIds(array $ids);

    /**
     * @return mixed
     */
    public function getCashAccount();

    /**
     * @return mixed
     */
    public function getDefault();

    /**
     * @param \User $user
     * @return mixed
     */
    public function overruleUser(\User $user);

    /**
     * @param $data
     *
     * @return \Account
     */
    public function store($data);

    /**
     * @param \Account $account
     * @param          $data
     *
     * @return mixed
     */
    public function update(\Account $account, $data);

} 