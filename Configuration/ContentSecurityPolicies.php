<?php

use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Directive;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Mutation;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\MutationCollection;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\MutationMode;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Scope;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\SourceKeyword;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\SourceScheme;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\UriValue;
use TYPO3\CMS\Core\Utility\WeakMapUtility;

return WeakMapUtility::fromEntries([

	// provide declarations for the backend
	Scope::backend(),

	// NOTICE: When using `MutationMode::Set` existing declarations will be overridden
	new MutationCollection(

		// results in `default-src 'self'`
		new Mutation(
			MutationMode::Set,
			Directive::DefaultSrc,
			SourceKeyword::self
		),

		// extends the ancestor directive ('default-src'), thus reuses 'self' and adds additional sources
		// results in `img-src 'self' data: https://*.typo3.org`
		new Mutation(
			MutationMode::Extend,
			Directive::ImgSrc,
			SourceScheme::data,
			new UriValue('https://*.typo3.org')
		),

		// extends the ancestor directive ('default-src'), thus reuses 'self' and adds additional sources
		// results in `script-src 'self' 'nonce-[random]'` ('nonce-proxy' is substituted when compiling the policy)
		new Mutation(
			MutationMode::Extend,
			Directive::ScriptSrc,
			SourceKeyword::nonceProxy
		),

		// sets (overrides) the directive, thus ignores 'self' of the 'default-src' directive
		// results in `worker-src blob:`
		new Mutation(
			MutationMode::Set,
			Directive::WorkerSrc,
			SourceScheme::blob
		)

	)
]);
