<?php

declare(strict_types=1);

namespace Tangible\RuleEngine;

/**
 * Leaf node in the rule tree — one condition produced by an operand.
 *
 * Concrete subclasses each represent one operand. They self-describe via
 * `uiDescriptor()` so a rule-builder UI can render the operator and value
 * picker dynamically.
 */
abstract class ConditionNode extends RuleNode {
    /** Evaluate this condition against the given evaluation context. */
    abstract public function evaluate(RuleEvaluationContext $ctx): bool;

    /**
     * Metadata used by a rule-builder UI to render the operator and
     * value pickers for this operand.
     *
     * @return array{key: string, label: string, operators: string[], value_schema: array<string, mixed>}
     */
    abstract public static function uiDescriptor(): array;
}
