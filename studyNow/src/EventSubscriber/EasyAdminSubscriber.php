<?php

namespace App\EventSubscriber;

use App\Entity\Category;
use App\Entity\Tutorial;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Core\Security;

class EasyAdminSubscriber implements EventSubscriberInterface
{
    private $slugger;
    private $security;

    public function __construct(SluggerInterface $slugger, Security $security)
    {
        $this->slugger = $slugger;
        $this->security = $security;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['setTutorialSlug'],
            ];
        }

    public function setTutorialSlug(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof Tutorial)) {
        return;
    }

        $slug = $this->slugger->slug($entity->getName());
        $entity->setName($slug);

        $slug = $entity->getLedifficulty();
        $entity->setLedifficulty($slug);

        $slug = $this->slugger->slug($entity->getDescription());
        $entity->setDescription($slug);

        $user = $this->security->getUser();
        $entity->addUser($user);


        /** @var Category $slug */
        $slug = $entity->getLecategory();
        $entity->setLecategory($slug);

//        $slug = $entity->getSteps();
//        $entity->addStep($slug);


    }
}