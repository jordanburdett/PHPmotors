INSERT INTO clients(
    clientFirstname,
    clientLastname,
    clientEmail,
    clientPassword,
    COMMENT
)
VALUES(
    "Tony",
    "Stark",
    "tony@starkent.com",
    "Iam1ronM@n",
    "I am the real Ironman"
);

UPDATE clients
set clientLevel = 3
WHERE clientFirstname = "Tony";

select clientLevel, clientFirstname from clients
WHERE clientFirstname = "Tony";

UPDATE inventory
set invDescription = "Spacious interior"
WHERE invModel = "Hummer";

SELECT inventory.invModel, carclassification.classificationName
FROM inventory
INNER JOIN carclassification ON carclassification.classificationId = inventory.classificationId
WHERE carclassification.classificationName = "SUV";

DELETE FROM inventory
WHERE inventory.invMake = "Jeep";

UPDATE inventory
set inventory.invImage = concat("/phpmotors", inventory.invImage);

SELECT * from inventory;