
import java.util.ArrayList;
import java.util.List;

public class Employe extends Person {

    private final int valueHours;
    private final int hours;
    private int subsidy;
    private float calculate;
    private final List<Discounts> discounts = new ArrayList<>();
    private float totalDiscounts;
    private final List<Extras> extras = new ArrayList<>();
    private float totalExtras = 0;

    public Employe(int valueHours, int hours) {
        super(1023, "Juan Esteban");
        this.valueHours = valueHours;
        this.hours = hours;
        setSubsidy();
        calculateSalary();
    }

    public int getValueHours() {
        return valueHours;
    }

    public void setSubsidy() {
        if ((valueHours * hours) < 2000000) {
            subsidy = 1000000;
        } else {
            subsidy = 0;
        }
    }

    public void addDiscounts(Discounts discount) {
        discounts.add(discount);
    }

    public void addExtra(Extras extra) {
        extras.add(extra);
    }

    private void setTotalDiscounts() {
        int netSalary = (valueHours * hours) + subsidy;
        totalDiscounts = 0;
        for (Discounts discount : discounts) {
            totalDiscounts += discount.discounts(netSalary);
        }
    }

    private void setTotalExtras() {
        totalExtras = 0;
        for (Extras extra : extras) {
            totalExtras += extra.extraPay(valueHours);
        }
    }

    public int calculateSalary() {
        setTotalDiscounts();
        setTotalExtras();
        int netSalary = (valueHours * hours) + subsidy;
        calculate = netSalary - totalDiscounts + totalExtras;
        return (int) calculate;
    }

    public int getCalculate() {
        return (int) calculate;
    }

    public int getSubsidy() {
        return subsidy;
    }

    public float getTotalDiscounts() {
        return totalDiscounts;
    }

    public float getTotalExtras() {
        return totalExtras;
    }
}