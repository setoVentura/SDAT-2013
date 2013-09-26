function UserProfile()
{
	this.fName="John";
	this.lName="Doe";
	this.title="Researcher";
	this.affiliation="UTEP";
	this.email="doej@elp.rr.com";
	this.password="do313";
	this.phone="(999)999-9999";
	this.type="3";
	this.frequency="2";
	this.getFName=function()
	{
		return this.fName;
	};
	
	this.getLName=function()
	{
		return this.lName;
	};
	
	this.getTitle=function()
	{
		return this.title;
	};
	
	this.getAffiliation=function()
	{
		return this.affiliation;
	};
	
	this.getEmail=function()
	{
		return this.email;
	};
	
	this.getPassword=function()
	{
		return this.password;
	};
	
	this.getPhone=function()
	{
		return this.phone;
	};
	
	
	this.getType=function()
	{
		return this.type;
	};
	
	this.getFrequency=function()
	{
		return this.frequency;
	};
	
	this.setFName=function(fNameIn)
	{
		this.fName=fNameIn;
	};
	
	this.setLName=function(lNameIn)
	{
		this.lName=lNameIn;
	};
	
	this.setTitle=function(titleIn)
	{
		this.title=titleIn;
	};
	
	this.setAffiliation=function(affilIn)
	{
		this.affiliation=affilIn;
	};
	
	this.setEmail=function(emailIn)
	{
		this.email=emailIn;
	};
	
	this.setPassword=function(passwordIn)
	{
		this.password=passwordIn;
	};
	
	this.setPhone=function(phoneIn)
	{
		this.phone=phoneIn;
	};
	
	this.setType=function(typeIn)
	{
		this.type=typeIn;
	};
	
	this.setFrequency=function(freqIn)
	{
		this.frequency=freqIn;
	};
}
