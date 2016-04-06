<?php 
	// src/Acme/TaskBundle/Form/Type/NameType.php
namespace Acme\TaskBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

 
class NameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('lastName')
			->add('address', new AddressType())
			->add('password', 'password');
        }
 
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Acme\TaskBundle\Entity\Name',
			'cascade_validation' => true,
		));
	}
 
    public function getName()
    {
        return 'name';
    }
}