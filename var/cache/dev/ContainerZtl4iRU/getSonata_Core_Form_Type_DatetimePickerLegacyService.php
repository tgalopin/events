<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.core.form.type.datetime_picker_legacy' shared service.

return $this->services['sonata.core.form.type.datetime_picker_legacy'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType(($this->privates['sonata.core.date.moment_format_converter'] ?? ($this->privates['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter())), ($this->services['translator'] ?? $this->getTranslatorService()));
