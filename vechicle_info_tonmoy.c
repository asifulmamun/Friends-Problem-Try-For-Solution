#include<stdio.h>
#include<string.h>

int main(){
    int vehicle_id;
    int No_of_wheel;
    char color[20];

    printf("Enter Vehicle ID: ");
    scanf("%d", &vehicle_id);
    
    printf("Enter number of wheels: ");
    scanf("%d", &No_of_wheel);
    
    printf("Enter Vehicle color: ");
    scanf("%s", color);
    
    printf("\n -------------- Vehicle Information By @asifulmamun ------------------- ");
    printf("\nVehicle ID is: %d\nNumber of wheels: %d\nVehicle color: %s", vehicle_id, No_of_wheel, color);

    
    return 0;

}