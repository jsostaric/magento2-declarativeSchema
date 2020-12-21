<?php

namespace Inchoo\DeclarativeSchema\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;

class AddDummyData implements DataPatchInterface, PatchVersionInterface
{
    protected $moduleDataSetup;
    protected $postFactory;
    protected $postResource;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        \Inchoo\DeclarativeSchema\Model\PostFactory $postFactory,
        \Inchoo\DeclarativeSchema\Model\ResourceModel\Post $postResource
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->postFactory = $postFactory;
        $this->postResource = $postResource;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public static function getVersion()
    {
        return '1.0.1';
    }

    public function apply()
    {
        for ($i = 1; $i < 15;$i++) {
            $post = $this->postFactory->create();
            $post->setTitle('Title number ' . $i);
            $post->setContent('Content for title ' . $i);

            $this->postResource->save($post);
        }
    }
}
