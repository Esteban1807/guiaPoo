
public class Main {
    public static void main(String[] args) {

        Employe employee = new Employe(100, 40);

        employee.addDiscounts(new Pension());
        employee.addDiscounts(new Health());
        employee.addDiscounts(new Arl(3));

        employee.addExtra(new Daytime(2));
        employee.addExtra(new Nighttime(3));
        employee.addExtra(new Holiday(1));

        employee.calculateSalary();

        System.out.println("Subsidy: $" + employee.getSubsidy());
        System.out.println("Total Discounts: $" + employee.getTotalDiscounts());
        System.out.println("Total Extras: $" + employee.getTotalExtras());
        System.out.println("Total Salary: $" + employee.getCalculate());
    }
}
