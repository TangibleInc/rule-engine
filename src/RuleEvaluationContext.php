<?php

declare(strict_types=1);

namespace Tangible\RuleEngine;

/**
 * Context passed to `ConditionNode::evaluate()`. Holds the user being
 * evaluated. Consumer plugins extend this to attach additional lookups
 * (e.g. LMS's `LmsRuleEvaluationContext` adds `CourseProgressLookup`).
 */
class RuleEvaluationContext {
    public function __construct(
        public readonly RuleSubject $user,
    ) {
    }
}
