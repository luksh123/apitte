<?php declare(strict_types = 1);

namespace Apitte\Core\Annotation\Controller;

use Attribute;
use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * @Annotation
 * @Target("METHOD")
 * @NamedArgumentConstructor()
 */
#[Attribute(Attribute::TARGET_METHOD)]
class RequestBody
{

	private ?string $description;

	private ?string $entity;

	private string $contentType;

	private bool $required;

	private bool $validation;

	public function __construct(?string $description = null, ?string $entity = null, bool $required = false, bool $validation = true, string $contentType = 'application/json')
	{
		$this->description = $description;
		$this->entity = $entity;
		$this->required = $required;
		$this->validation = $validation;
		$this->contentType = $contentType;
	}

	public function getEntity(): ?string
	{
		return $this->entity;
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function getContentType(): string
	{
		return $this->contentType;
	}

	public function isRequired(): bool
	{
		return $this->required;
	}

	public function isValidation(): bool
	{
		return $this->validation;
	}

}
