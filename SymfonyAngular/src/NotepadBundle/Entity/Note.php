<?php

namespace NotepadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="NotepadBundle\Repository\NoteRepository")
 */
class Note
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @Assert\DateTime()
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var Category
     *
     * @Assert\NotNull()
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="notes")
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date = new \DateTime();
    }

    /**
     * Return an array representing this object.
     *
     * @return array
     */
    public function toArray() {
        return array(
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'date' => $this->getDate()->format('Y-m-d'),
            'content' => $this->content,
            'category' => $this->getCategory()->toArray(),
        );
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Note
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Note
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Note
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getXMLContent()
    {
        return
        '<?xml version="1.0" encoding="UTF-8" ?>' .
        '<note>' . $this->content . '</note>';
    }

    /**
     * Set category
     *
     * @param \NotepadBundle\Entity\Category $category
     *
     * @return Note
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \NotepadBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @Assert\IsTrue(message="le document xml est invalide")
     */
    public function isValid()
    {
      libxml_use_internal_errors(true);
      $xml = new\DOMDocument();
			$implementation = new \DOMImplementation();
			$xml->appendChild($implementation->createDocumentType('note'));
			$note_elem = $xml->createElement('note');

			$note_xml = $xml->createDocumentFragment();
			$note_xml->appendXML($this->content);
			$note_elem->appendChild($note_xml);
			$xml->appendChild($note_elem);

			return $xml->schemaValidate('C:\wamp64\www\Symfony\src\NotepadBundle\Resources\xml\xmlshema.xsd');

    }
}
