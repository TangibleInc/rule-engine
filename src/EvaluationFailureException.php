<?php

declare(strict_types=1);

namespace Tangible\RuleEngine;

/**
 * Raised by a `ConditionNode` when it cannot produce a definitive
 * true/false result — typically because its backing infrastructure is
 * missing (e.g. a third-party plugin that ships the operand is deactivated,
 * or a required lookup is absent from the evaluation context).
 *
 * Consumers should catch this, surface the failure for observability, and
 * treat the condition as failsafe `false`.
 */
final class EvaluationFailureException extends \RuntimeException {
    public function __construct(
        public readonly string $operandType,
        string $reason,
    ) {
        parent::__construct($reason);
    }
}
