<?php 
namespace com\zoho\crm\api\emailtemplates;

use com\zoho\crm\api\modules\Module;
use com\zoho\crm\api\sendmail\Template;
use com\zoho\crm\api\users\User;
use com\zoho\crm\api\util\Model;

class EmailTemplate implements Template, Model
{

	private  $content;
	private  $createdTime;
	private  $subject;
	private  $module;
	private  $type;
	private  $createdBy;
	private  $modifiedTime;
	private  $lastUsageTime;
	private  $associated;
	private  $name;
	private  $modifiedBy;
	private  $description;
	private  $id;
	private  $editorMode;
	private  $favorite;
	private  $attachments;
	private  $folder;
	private  $consentLinked;
	private  $keyModified=array();

	/**
	 * The method to get the content
	 * @return string A string representing the content
	 */
	public  function getContent()
	{
		return $this->content; 

	}

	/**
	 * The method to set the value to content
	 * @param string $content A string
	 */
	public  function setContent(string $content)
	{
		$this->content=$content; 
		$this->keyModified['content'] = 1; 

	}

	/**
	 * The method to get the createdTime
	 * @return \DateTime An instance of \DateTime
	 */
	public  function getCreatedTime()
	{
		return $this->createdTime; 

	}

	/**
	 * The method to set the value to createdTime
	 * @param \DateTime $createdTime An instance of \DateTime
	 */
	public  function setCreatedTime(\DateTime $createdTime)
	{
		$this->createdTime=$createdTime; 
		$this->keyModified['created_time'] = 1; 

	}

	/**
	 * The method to get the subject
	 * @return string A string representing the subject
	 */
	public  function getSubject()
	{
		return $this->subject; 

	}

	/**
	 * The method to set the value to subject
	 * @param string $subject A string
	 */
	public  function setSubject(string $subject)
	{
		$this->subject=$subject; 
		$this->keyModified['subject'] = 1; 

	}

	/**
	 * The method to get the module
	 * @return Module An instance of Module
	 */
	public  function getModule()
	{
		return $this->module; 

	}

	/**
	 * The method to set the value to module
	 * @param Module $module An instance of Module
	 */
	public  function setModule(Module $module)
	{
		$this->module=$module; 
		$this->keyModified['module'] = 1; 

	}

	/**
	 * The method to get the type
	 * @return string A string representing the type
	 */
	public  function getType()
	{
		return $this->type; 

	}

	/**
	 * The method to set the value to type
	 * @param string $type A string
	 */
	public  function setType(string $type)
	{
		$this->type=$type; 
		$this->keyModified['type'] = 1; 

	}

	/**
	 * The method to get the createdBy
	 * @return User An instance of User
	 */
	public  function getCreatedBy()
	{
		return $this->createdBy; 

	}

	/**
	 * The method to set the value to createdBy
	 * @param User $createdBy An instance of User
	 */
	public  function setCreatedBy(User $createdBy)
	{
		$this->createdBy=$createdBy; 
		$this->keyModified['created_by'] = 1; 

	}

	/**
	 * The method to get the modifiedTime
	 * @return \DateTime An instance of \DateTime
	 */
	public  function getModifiedTime()
	{
		return $this->modifiedTime; 

	}

	/**
	 * The method to set the value to modifiedTime
	 * @param \DateTime $modifiedTime An instance of \DateTime
	 */
	public  function setModifiedTime(\DateTime $modifiedTime)
	{
		$this->modifiedTime=$modifiedTime; 
		$this->keyModified['modified_time'] = 1; 

	}

	/**
	 * The method to get the lastUsageTime
	 * @return \DateTime An instance of \DateTime
	 */
	public  function getLastUsageTime()
	{
		return $this->lastUsageTime; 

	}

	/**
	 * The method to set the value to lastUsageTime
	 * @param \DateTime $lastUsageTime An instance of \DateTime
	 */
	public  function setLastUsageTime(\DateTime $lastUsageTime)
	{
		$this->lastUsageTime=$lastUsageTime; 
		$this->keyModified['last_usage_time'] = 1; 

	}

	/**
	 * The method to get the associated
	 * @return bool A bool representing the associated
	 */
	public  function getAssociated()
	{
		return $this->associated; 

	}

	/**
	 * The method to set the value to associated
	 * @param bool $associated A bool
	 */
	public  function setAssociated(bool $associated)
	{
		$this->associated=$associated; 
		$this->keyModified['associated'] = 1; 

	}

	/**
	 * The method to get the name
	 * @return string A string representing the name
	 */
	public  function getName()
	{
		return $this->name; 

	}

	/**
	 * The method to set the value to name
	 * @param string $name A string
	 */
	public  function setName(string $name)
	{
		$this->name=$name; 
		$this->keyModified['name'] = 1; 

	}

	/**
	 * The method to get the modifiedBy
	 * @return User An instance of User
	 */
	public  function getModifiedBy()
	{
		return $this->modifiedBy; 

	}

	/**
	 * The method to set the value to modifiedBy
	 * @param User $modifiedBy An instance of User
	 */
	public  function setModifiedBy(User $modifiedBy)
	{
		$this->modifiedBy=$modifiedBy; 
		$this->keyModified['modified_by'] = 1; 

	}

	/**
	 * The method to get the description
	 * @return string A string representing the description
	 */
	public  function getDescription()
	{
		return $this->description; 

	}

	/**
	 * The method to set the value to description
	 * @param string $description A string
	 */
	public  function setDescription(string $description)
	{
		$this->description=$description; 
		$this->keyModified['description'] = 1; 

	}

	/**
	 * The method to get the id
	 * @return string A string representing the id
	 */
	public  function getId()
	{
		return $this->id; 

	}

	/**
	 * The method to set the value to id
	 * @param string $id A string
	 */
	public  function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified['id'] = 1; 

	}

	/**
	 * The method to get the editorMode
	 * @return string A string representing the editorMode
	 */
	public  function getEditorMode()
	{
		return $this->editorMode; 

	}

	/**
	 * The method to set the value to editorMode
	 * @param string $editorMode A string
	 */
	public  function setEditorMode(string $editorMode)
	{
		$this->editorMode=$editorMode; 
		$this->keyModified['editor_mode'] = 1; 

	}

	/**
	 * The method to get the favorite
	 * @return bool A bool representing the favorite
	 */
	public  function getFavorite()
	{
		return $this->favorite; 

	}

	/**
	 * The method to set the value to favorite
	 * @param bool $favorite A bool
	 */
	public  function setFavorite(bool $favorite)
	{
		$this->favorite=$favorite; 
		$this->keyModified['favorite'] = 1; 

	}

	/**
	 * The method to get the attachments
	 * @return array A array representing the attachments
	 */
	public  function getAttachments()
	{
		return $this->attachments; 

	}

	/**
	 * The method to set the value to attachments
	 * @param array $attachments A array
	 */
	public  function setAttachments(array $attachments)
	{
		$this->attachments=$attachments; 
		$this->keyModified['attachments'] = 1; 

	}

	/**
	 * The method to get the folder
	 * @return EmailTemplate An instance of EmailTemplate
	 */
	public  function getFolder()
	{
		return $this->folder; 

	}

	/**
	 * The method to set the value to folder
	 * @param EmailTemplate $folder An instance of EmailTemplate
	 */
	public  function setFolder(EmailTemplate $folder)
	{
		$this->folder=$folder; 
		$this->keyModified['folder'] = 1; 

	}

	/**
	 * The method to get the consentLinked
	 * @return bool A bool representing the consentLinked
	 */
	public  function getConsentLinked()
	{
		return $this->consentLinked; 

	}

	/**
	 * The method to set the value to consentLinked
	 * @param bool $consentLinked A bool
	 */
	public  function setConsentLinked(bool $consentLinked)
	{
		$this->consentLinked=$consentLinked; 
		$this->keyModified['consent_linked'] = 1; 

	}

	/**
	 * The method to check if the user has modified the given key
	 * @param string $key A string
	 * @return int A int representing the modification
	 */
	public  function isKeyModified(string $key)
	{
		if(((array_key_exists($key, $this->keyModified))))
		{
			return $this->keyModified[$key]; 

		}
		return null; 

	}

	/**
	 * The method to mark the given key as modified
	 * @param string $key A string
	 * @param int $modification A int
	 */
	public  function setKeyModified(string $key, int $modification)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
