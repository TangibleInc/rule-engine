<?php

declare(strict_types=1);

namespace Tangible\RuleEngine;

use Tangible\Ast\AstNode;
use Tangible\Ast\Validation\ValidationError;

/**
 * Base for every node in a rule-engine AST.
 *
 * The registry is open: consumer plugins seed built-in operands and
 * third-party plugins extend the catalog by hooking the
 * `tangible_rule_engine_registry` WordPress filter.
 */
abstract class RuleNode extends AstNode {
    /** @return array<string, class-string<AstNode>> */
    public static function registry(): array {
        return apply_filters('tangible_rule_engine_registry', []);
    }

    /**
     * Validate this node's own data shape. Composite nodes are responsible
     * for cascading the call to their children.
     *
     * @return ValidationError[]
     */
    abstract public function validateSelf(string $path): array;
}
