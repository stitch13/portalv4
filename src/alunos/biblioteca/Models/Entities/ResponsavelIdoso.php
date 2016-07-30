<?php

namespace alunos\biblioteca\Models\Entities;

/**
 * 
 * @Entity
 * @Table(name="ResponsavelIdoso")
 */
class ResponsavelIdoso
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="Id")
     */
    public $Id;
    
    /**
     * @Column(type="string", nullable=false, name="ResponsavelCPF")
     */
    public $ResponsavelCPF;
    
    /**
     * @Column(type="string", nullable=false, name="ResponsavelNome")
     */
    public $ResponsavelNome;
    
    /**
     * @Column(type="string", nullable=false, name="ResponsavelEmail")
     */
    public $ResponsavelEmail;
    
    /**
     * @Column(type="string", nullable=false, name="ResponsavelTelefone")
     */
    public $ResponsavelTelefone;
    
    /**
     * @Column(type="string", nullable=false, name="ResponsavelDDD")
     */
    public $ResponsavelDDD;
    
    /**
     * @Column(type="string", nullable=false, name="IdosoCPF")
     */
    public $IdosoCPF;
    
    /**
     * @Column(type="string", nullable=false, name="IdosoNome")
     */
    public $IdosoNome;
    
    public function getId()
        {
			return $this->id;
		}
    
    public function getResponsavelCPF()
        {
			return $this->ResponsavelCPF;
		}
    
    public function getResponsavelNome()
        {
			return $this->ResponsavelNome;
		}
    
    public function getResponsavelEmail()
        {
			return $this->ResponsavelEmail;
		}
    
    public function getResponsavelTelefone()
        {
			return $this->ResponsavelTelefone;
		}
    
    public function getResponsavelDDD()
        {
			return $this->ResponsavelDDD;
		}
    
    public function getIdosoCPF()
        {
			return $this->IdosoCPF;
		}
    
    public function getIdosoNome()
        {
			return $this->IdosoNome;
		}
    
    public function setResponsavelCPF($ResponsavelCPF)
        {
			$this->ResponsavelCPF = $ResponsavelCPF;
		}
    
    public function setResponsavelNome($ResponsavelNome)
        {
			$this->$ResponsavelNome = $ResponsavelNome;
		}
    
    public function setResponsavelEmail($ResponsavelEmail)
        {
			$this->$ResponsavelEmail = $ResponsavelEmail;
		}
    
    public function setResponsavelTelefone($ResponsavelTelefone)
        {
			$this->$ResponsavelTelefone = $ResponsavelTelefone;
		}
    
    public function setResponsavelDDD($ResponsavelDDD)
        {
			$this->$ResponsavelDDD = $ResponsavelDDD;
		}
    public function setIdosoCPF($IdosoCPF)
        {
			$this->$IdosoCPF = $IdosoCPF;
		}
    public function setIdosoNome($IdosoNome)
        {
			$this->$IdosoNome = $IdosoNome;
		}
}