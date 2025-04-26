
public class Daytime extends Extras {

    private final float dayTime = 1.25f;
    private final int factor;

    public Daytime(int extraHours) {
        super(extraHours);
        this.factor = extraHours;
    }

    @Override
    public float extraPay(int valueHour) {
        return (valueHour * dayTime) * factor;
    }
}