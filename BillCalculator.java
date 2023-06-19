package Calculator;
import java.util.Scanner;

public class BillCalculator {
    public static void main(String[] args) {
        int units;
        double billAmount;
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter the customer type (1 for Domestic, 2 for Hand-loom in Residence): ");
        int customerType = sc.nextInt();

        System.out.println("Enter the units: ");
        units = sc.nextInt();

        if (customerType == 1) {
            // Domestic Customer
            if (units <= 100) {
                billAmount = 0;
            } else if (units <= 200) {
                billAmount = (units - 100) * 2.50;
            } else if (units <= 400) {
                billAmount = 100 * 2.50 + (units - 200) * 4.50;
            } else if (units <= 500) {
                billAmount = 100 * 2.50 + 200 * 4.50 + (units - 400) * 6.00;
            } else {
                // For units above 500
                billAmount = 100 * 2.50 + 200 * 4.50 + 100 * 6.00 + (units - 500) * 8.00;
            }
        } else if (customerType == 2) {
            // Hand-loom in Residence Customer
            if (units <= 200) {
                billAmount = 0;
            } else if (units <= 400) {
                billAmount = (units - 200) * 4.50;
            } else if (units <= 500) {
                billAmount = 200 * 4.50 + (units - 400) * 6.00;
            } else {
                // For units above 500
                billAmount = 200 * 4.50 + 100 * 6.00 + (units - 500) * 8.00;
            }
        } else {
            System.out.println("Invalid customer type entered.");
            return;
        }

        System.out.println("Bill Amount = " + billAmount);
    }
}

