<?php

declare(strict_types=1);

namespace Tangible\RuleEngine;

/**
 * Context passed to `ConditionNode::evaluate()`. Holds the user being
 * evaluated and the evaluation instant. Consumer plugins extend this to
 * attach additional lookups (e.g. LMS's `LmsRuleEvaluationContext` adds
 * `CourseProgressLookup`).
 *
 * `$now` lets callers evaluate time-based conditions "as of" an arbitrary
 * instant (course preview, tests) instead of the wall clock.
 */
class RuleEvaluationContext {
    public function __construct(
        public readonly RuleSubject $user,
        public readonly \DateTimeImmutable $now = new \DateTimeImmutable(),
    ) {
    }
}
