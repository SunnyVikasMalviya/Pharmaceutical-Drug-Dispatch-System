# Pharmaceutical-Drug-Dispatch-System
A set of web pages using HTML as front-end and PHP as back-end. The idea was to construct a website that works as an intermediary between hospitals and pharma companies. Companies and Hospitals can register on this website. Companies can upload the medicines that they manufacture and hospital can compare medicines that they need between the different companies that manufacture them. A link to directly contact the companies can also provided for the hospitals. I made this project during 2nd year of my engineering as my PHP mini project.


Pharmaceutical Drug Dispatch System
Vikas Malviya
Department of Computer Science and Engineering
SRM Institute of Science and Technology 
Chennai - 600089

Abstract
The affordability of a drug is dependent on many factors from what we call ‘the unnecessary cost hiking factors’ like the brand-name, ties between pharma companies and hospitals, privatization of the patent registrations dates and their expiry etc., to ‘the unavoidable factors’ like the availability of drug components and their amount of usage, the government approvals, quality testing of the drug, the disease that the medicine cures, the production cost etc. And many of the cheaply producible medicines have higher costs that can be otherwise easily sold for lower cost if we can just find a way to somehow tackle and eliminate ‘the unnecessary cost hiking factors’ and get the cost to a bare minimum so that the drug becomes easily available, accessible and affordable even by the most destitute people of our society. Pharmaceutical Drug Dispatch System (PDDS) is one such approach.

Introduction
As competition brings out the best in the participants, at times it does lead to involvement of bad practices that lead to problems to the other participants and that can also make them conform to the same practices. But this becomes a much larger problem when these can affect not just the participants but also the society and hence individuals. The same is the case with the competition among pharma manufacturing companies and among hospitals. Very often then not, large pharmaceutical drug manufacturing companies and hospitals tend to involve themselves into practices that help them sell their manufactured drugs in greater numbers as compared to their participants. This gives rise to an increment in the prices of these drugs and at times these drugs become unaffordable.
To deal with these problems, a common interface for the hospitals, pharma-manufacturers and the governing bodies is proposed in this project that can help eliminate the factors that unnecessarily result in an increase of the prices of drugs and make it difficult for destitute people to buy them. 
The interface provides a single portal where hospitals and pharma-manufacturers register themselves. Pharma-companies upload the details of all the drugs that they manufacture. This information can be looked upon by registered hospitals, providing them a kind of online bulk shopping platform but just for drugs for their dispensaries. They can find the medicines that they wish to buy by contacting the manufacturer. These transactions can be easily looked upon by medical governing bodies and any illegal action can be easily traced down. The governing body can also revoke access of any of the institution if it deems necessary when they are not following the norms.
Using the PDDS, …
1.	Middle men are removed from the whole transaction.
2.	Hospital and company ties can be broken and drugs are bought only on the basis of their composition and not on the basis of the brand name.
3.	Records of all the transaction can be easily kept.
4.	Generic medicines will get introduced as patents and privatization of medicines will be no more into play.
5.	Non-governmental illegal sale of drugs will come to a halt.
…and many other unforeseeable factors will also be eliminated. 

Objective
The parent objective of the project is to bring down the cost of medicines by providing a way of reducing the ‘unnecessary cost hiking factors’ to a bare minimum and to make the drugs easily affordable to the mass. 
The objective of PDDS is to act as an interface between hospitals and pharma manufacturers. This interface when used at large scale as a single portal governed by state or country appointed governing bodies can help bring the cost of eliminate the drugs down by significantly removing the ‘unnecessary cost hiking factors’ by keeping a check on all the transactions done between hospitals and pharma-manufacturers and by motivating a healthy competition among the companies without the use of illegal bad practices.

Materials and Methods
All the portal design will require specialized software required for website and web apps development (WordPress, Magento, WooCommerce etc.). A database (e.g.: Oracle MySQL, MySqli, MongoDB etc.) for storage of all the data and proper security of this database will require specialized software. A server (XAMPP, WAMPP etc.) that can act as a dedicated 24-hour working base for providing a seamless working of the web sites and apps and keeping all records confidential.
The licensing of all these above-mentioned software requirements will also be a major part of the project requirements acquisition.

Working
Module 1: Registration and Logging in Portal
PDDS provides a website-based platform which provides two portals at the homepage (one for each) where hospitals and pharma-manufacturers companies can register if they come to the website for the first time or login if they have already registered. The hospitals or pharma-manufacturers can nominate as many users (one user is mandatory to be nominated, preferably the head of that institution) from their institution while registration as they want. It is only through these nominated users and their passwords that the data about the institution that is present in PDDS database can be updated or modified. These users have the highest level of authorization when it comes to access of the institutional data present in the PDDS database. The rest of the users can access the data of their institution by logging in through a common user-id and password that the whole institution will be assigned which will also have the least level of authorization or view level authorization. The whole data will be confidentially stored in a database present in the PDDS servers and it can only be governed by bodies that are authorized by the government or medical governing bodies in the country.
Module 2: Pharma-Manufacturers Portal
After the user from a pharma-manufacturer has successfully logged in, he/she gets to choose from many operations to work with. The major ones being, … 
1.	uploading and keeping the data about the drugs that their company produces updated. Data like drug dosage, drug manufacturing cost, drug manufacturing date and expiry date, location of manufacture, quality assurance authority, drug components and their compositions etc.
2.	nominating new users from the institution and assigning them for different sorts of working on PDDS, like some users can be nominated for keeping check on the institutional data, others can work with the data of the hospitals that are buying drugs from their company, and yet others users can be working with drug stored and stock keeping data.
3.	 viewing, adding to or updating their institutional data.
4.	looking at the hospitals that are buying medicines from their companies, new orders, stock availability etc. (just like an online shopping store but for just drugs sales at large scales such as state level or country level)
…and many other options that they can choose from. 
Module 3: Hospitals Portal
The hospitals also have many users nominated from its side that look into different operation available to them through PDDS. For example, the dispensary user has a view level operation available for medicines available through companies in PDDS and through this he/she comes up with the demand of the medicines that are required on a timely basis or on the go demand. The accounting department can look into the demands and the pricing of the drugs from the information of drugs uploaded on the PDDS by the pharma-companies and then can decide which companies offer the drugs for the cheapest price, or in the least time based on manufacturing area or manufacturing time and availability in the companies stock. Then all this information can be given to the high-level officials to sanction a demand through PDDS to the pharma-manufacturer that they are interested in and can easily contact the pharma-companies through the information uploaded by the company in the PDDS database. All the transaction records are kept in PDDS database that can be easily governed by the government or other medical bodies appointed by the government for the task. The nominated users can also do the following operation based on their abstraction levels: 
1.	Look for the medicine that they are searching and categorically search for dosage or power of medicines by applying different filters on the drug data.
2.	Look at the list of companies providing a particular medicine and their details.
3.	Look for medicines based on availability of stock in a particular company.
4.	 Decide to buy medicines needs partially from a list of companies with out even information to the company and this could help them decide in the future the best drug manufacturer.
5.	Make or modify nominated users and their abstraction levels.
6.	Update the hospital information present in the PDDS database.
…and many others.
Module 4: Governing Bodies Portal
The governing bodies who are made responsible to look into all the process from medicinal data entry by the pharma-manufacturers to drug delivery to the hospitals, will also have a small portal through which they can view all the transactions done between the hospitals and the companies and keep a check on them to know whether everything is legally going on. They can also grant and revoke permissions for hospitals and pharma-manufacturers if any of them is found not to be following the norms set by the governing bodies.
        Module 5: Database
A large part of the cost of the project will be utilized in keeping and maintaining the database working and keeping all this data confidential. With the huge amount of data, when dealing at state or country level with thousands of hospitals transacting with hundreds of pharma-manufacturers producing thousands of medicines, the maintenance will be a huge challenge requiring a lot of system optimization and tools for faster transaction on these data.  

Result
The proposed pharmaceutical drug dispatch system can be a very efficient and promising alternative for the currently used systems and will be able to achieve its parent objectives if implemented properly at a large scale. Prototypes of the PDDS can be used to check the feasibility of the whole model and it can help obtain better results when dealing with a large amount of data generated by the drug manufacturers and hospitals.

Conclusion
The prototype of PDDS was developed that shows the basic implementation of the an actual PDDS, which can act as an interface between hospitals and pharma manufacturing companies and the use of which at large scale can effectively reduce the cost of pharmaceutical drugs and increase the availability of drugs at more places.
