<?php


class SqlUserDao implements UserDao
{

    /**
     * @var UserTransformer
     */
    private $transformer;

    /**
     * SqlUserDao constructor.
     * @param $transformer
     */
    public function __construct(UserTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function findOne($id) {
        return $this->transformer->transform(new UserEntity());
    }

}