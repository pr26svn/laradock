<?php
/*фабрика*/
interface ISecretKey
{
    public function getSecretKey();
}

class SecretKeyFile implements ISecretKey
{
   /***** */
}

class SecretKeyDB implements ISecretKey
{
  /***** */
}

class SecretKeyCloud implements ISecretKey
{
    /***** */
}

abstract class ASecretKey
{

    
    abstract public function getSecretKey(): ISecretKey;

    public function takeKey()
    {
        $key = $this->getSecretKey();
       return $key;
    }
}

class SecretKeyFileManager extends ASecretKey
{
    public function getSecretKey(): Interviewer
    {
        return new SecretKeyFile();
    }
}