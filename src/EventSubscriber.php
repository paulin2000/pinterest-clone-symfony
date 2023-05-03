<?php
//
//namespace App\EventSubscriber;
//
//use Doctrine\Common\EventSubscriber;
//use Doctrine\ORM\Events;
//use Doctrine\Persistence\Event\LifecycleEventArgs;
//
//class UpdatedAtSubscriber implements EventSubscriber
//{
//    public function getSubscribedEvents(): array
//    {
//        return [Events::prePersist];
//    }
//
//    public function prePersist(LifecycleEventArgs $args)
//    {
//        $entity = $args->getObject();
//        if (method_exists($entity, 'setUpdatedAt')) {
//            $entity->setUpdatedAt(new \DateTime());
//        }
//    }
//}
