create table pizza
(
    id           int auto_increment
        primary key,
    bodemFormaat enum ('20', '25', '30', '35', '40')                                                         not null,
    saus         enum ('tomatensaus', 'extra tomatensaus', 'spicy tomatensaus', 'bbq saus', 'creme fraiche') not null,
    toppings     enum ('vegan', 'vegetarisch', 'vlees', '')                                                  not null,
    kruiden      json                                                                                        not null
)
    engine = InnoDB;

