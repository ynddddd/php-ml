<?php

declare (strict_types = 1);

namespace Phpml\Classifier;

interface Classifier
{
    /**
     * @param array $samples
     * @param array $labels
     */
    public function train(array $samples, array $labels);

    /**
     * @param array $sample
     *
     * @return mixed
     */
    public function predict(array $sample);
}