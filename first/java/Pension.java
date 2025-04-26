
public class Pension extends Discounts {

    private final float pension = 0.04f;

    @Override
    public float discounts(int salary) {
        return salary * pension;
    }
}
