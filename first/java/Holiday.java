
public class Holiday extends Extras {

    private final float holiday = 2.0f;
    private final int factor;

    public Holiday(int extraHours) {
        super(extraHours);
        this.factor = extraHours;
    }

    @Override
    public float extraPay(int valueHour) {
        return (valueHour * holiday) * factor;
    }
}
