<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.core.form.type.date_range_picker' shared service.

return $this->services['sonata.core.form.type.date_range_picker'] = new \Sonata\Form\Type\DateRangePickerType(($this->services['translator'] ?? $this->getTranslatorService()));
