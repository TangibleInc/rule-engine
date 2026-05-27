<?php

declare(strict_types=1);

namespace Tangible\RuleEngine;

/**
 * The user/actor a rule is being evaluated against. Consumer plugins
 * implement this on whatever auth/user-context type they already have
 * (e.g. LMS's `UserContext`) — the rule engine itself stays decoupled
 * from any specific auth model.
 */
interface RuleSubject {
    public function getUserId(): int;

    /** @return string[] */
    public function getRoles(): array;

    /** @return string[] */
    public function getCapabilities(): array;
}
